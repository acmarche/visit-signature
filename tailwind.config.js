//https://play.tailwindcss.com/4db6DDF78i
/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{html,js}"],
    theme: {
        extend: {
            fontFamily: {
                'signature': ['Georgia', 'serif', 'Helvetica', 'Arial', 'sans-serif'],
            },
            colors: {
                signature: {
                    virginie: '#F5CC73',
                    mathieu: '#64966F',
                    heidi: '#AAB7D8',
                },
            },
        },
    },
    plugins: [

    ],
}
