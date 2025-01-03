resource "aws_db_instance" "phpdb" {
  identifier_prefix   = "terraform-mysql"
  engine              = "mysql"
  engine_version      = "5.7"
  allocated_storage   = 10
  instance_class      = "db.t3.micro"
  skip_final_snapshot = true
  db_name             = var.db_name
  username            = var.db_username
  password            = var.db_password
  vpc_security_group_ids = [aws_security_group.db.id]
}

resource "aws_security_group" "db" {
  name = "phpdb-sg"

  ingress {
    from_port   = 3306
    to_port     = 3306
    protocol    = "tcp"
    security_groups = [aws_security_group.instance.id]
  }
  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

variable "db_name" {
  description = "The name for the database"
  type        = string
  sensitive   = true
  default     = "webtest"
}

variable "db_username" {
  description = "The username for the database"
  type        = string
  sensitive   = true
  default     = "testuser"
}

variable "db_password" {
  description = "The password for the database"
  type        = string
  sensitive   = true
  default     = "testpass"
}

output "address" {
  value       = aws_db_instance.phpdb.address
  description = "Connect to the database at this endpoint"
}
output "port" {
  value       = aws_db_instance.phpdb.port
  description = "The port the database is listening on"
}
output "endpoint" {
  value       = aws_db_instance.phpdb.endpoint
  description = "The endpoint of database"
}
# address:port -> endpoint
