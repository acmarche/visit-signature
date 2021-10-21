#install
npx tailwindcss -o tailwind.css
#init config
npx tailwindcss init
#disable prefixer
npx tailwindcss --no-autoprefixer -o tailwind.css
#watching
npx tailwindcss -o tailwind.css --watch
#compile
NODE_ENV=production npx tailwindcss -o ./dist/tailwind.css
#extract css
php signature.php > compiled.html
