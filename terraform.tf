provider "scaleway" {
  region = "ams1"
  organization = "aece51c7-90cd-4414-8738-8ff99785e7da"
  token        = "db5b9056-1e1b-468a-8642-a3082e020b46"
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
