module.exports = {
	purge: [
		'./*.php',
		'./*.js',
		'./*.html',
		'./admin/*.php',
		'./admin/**/*.php',
		'./admin/**/*.js',
		'./includes/*.php',
		'./src/**/*.html',
		'./src/**/*.php',
		'./src/**/*.js',
	],
	darkMode: false, // or 'media' or 'class'
	theme: {
		extend: {},
	},
	variants: {
		extend: {},
	},
	plugins: [],
};
