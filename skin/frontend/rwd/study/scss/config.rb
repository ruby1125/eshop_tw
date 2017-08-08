# note: this should never truly be refernced since we are using relative assets
http_path = "/skin/frontend/rwd/default/"
css_dir = "../css"
sass_dir = "../scss"
images_dir = "../images"
javascripts_dir = "../js"
fonts_dir = "../fonts"
relative_assets = true

output_style = :expanded
environment = :production
line_comments = true
#(只在開發階段)
Encoding.default_external = 'utf-8'
# (確認產生的css檔案為utf編碼) 