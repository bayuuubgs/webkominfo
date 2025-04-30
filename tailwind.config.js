/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "./resources/**/*.js",
    ],
    safelist: [
        'text-gray10', 'text-gray70',
        'text-gray-300', 'text-gray-600',
        'group-hover:border-gray-300',
        'group-hover:border-primary30',
        'grid-rows-2', 'grid-rows-1'
    ],
    theme: {
        extend: {
            fontFamily: {
                jakarta: ["Plus Jakarta Sans", "sans-serif"],
                Heebo: ['Heebo', 'sans-serif'],
            },
            fontSize: {
                display: ["64px", { lineHeight: "64px" }],
                h1: ["40px", { lineHeight: "55px" }],
                h2: ["24px", { lineHeight: "31px" }],
                h3: ["18px", { lineHeight: "27px" }],
                p: ["14px", { lineHeight: "21px" }],
                label: ["10px", { lineHeight: "10px" }],

                displayM: ["32px", { lineHeight: "32px" }],
                h1M: ["16px", { lineHeight: "20px" }],
                h2M: ["14px", { lineHeight: "20px" }],
                h3M: ["12px", { lineHeight: "15px" }],
                pM: ["10px", { lineHeight: "15px" }],
                labelM: ["8px", { lineHeight: "10px" }],
            },
            colors: {
                gray90: "#181818",
                gray70: "#484848",
                gray50: "#919191",
                gray30: "#F2F2F2",
                gray10: "#FFFFFF",
                primary100: "#1e1b4b",
                primary50: "#4338ca",
                primary30: "#6366f1",
                secondary70: "#E63946",
                secondary50: "#FF7B82",
                background: "#E9EEF4",
                backgroundred: "#F7ECEC",
            },
        },
    },
    plugins: [],
};
