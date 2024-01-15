terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 5.0"
    }
  }
}

provider "aws"{
    region = "ap-southeast-1"
    access_key = "AKIARKBBELQBW2BQ5QMY"
    secret_key = "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"
}

resource "tls_private_key" "rsa_4096" {
  algorithm = "RSA"
  rsa_bits  = 4096
}

variable "key_name" {}

resource "aws_key_pair" "key_pair" {
  key_name   = var.key_name
  public_key = tls_private_key.rsa_4096.public_key_openssh
}

resource "local_file" "private_key" {
    content = tls_private_key.rsa_4096.private_key_pem
    filename = var.key_name
}

resource "aws_instance" "wordpress_instance" {
  ami           = "ami-0fa377108253bf620"
  instance_type = "t2.micro"
  key_name = aws_key_pair.key_pair.key_name

  tags = {
    Name = "wordpress_instance"
  }
}

resource "aws_s3_bucket" "cloudcrafters-tfstate-bkt" {
  bucket           = "cloudcrafters-tfstate-bkt"
  acl = "private"  
  tags = {
    Name = "Terraform State Bucket"
  }
}
