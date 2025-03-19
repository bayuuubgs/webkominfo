/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                jakarta: ["'Plus Jakarta Sans'", "sans-serif"],
            },
            fontSize: {
                display: ["64px", { lineHeight: "64px" }],
                h1: ["40px", { lineHeight: "55px" }],
                h2: ["24px", { lineHeight: "31px" }],
                h3: ["18px", { lineHeight: "27px" }],
                p: ["14px", { lineHeight: "21px" }],
                label: ["10px", { lineHeight: "10px" }],
            },
            colors: {
                gray90: "#181818",
                gray70: "#484848",
                gray50: "#919191",
                gray30: "#F2F2F2",
                gray10: "#FFFFFF",
                primary100: "#1F185F",
                primary50: "#3B2CB5",
                primary30: "#7A74F0",
                secondary70: "#E63946",
                secondary50: "#FF7B82",
                background: "#E9EEF4",
                backgroundred: "#F7ECEC",
            },
        },
    },
};
