provider "scaleway" {
  region = "ams1"
  organization = "aece51c7-90cd-4414-8738-8ff99785e7da"
  token        = "${var.scw_token}"
}

data "scaleway_image" "eli" {
  architecture = "x86_64"
  name         = "Ubuntu Bionic"
}

resource "scaleway_server" "eli" {
  name  = "eli"
  image = "${data.scaleway_image.eli.id}"
  type  = "START1-S"
}
