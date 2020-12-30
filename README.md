**Creating Dev Environment

This wordpress plugin uses the following tools
* [WordPress Plugin Boilerplate Generater](https://wppb.me/)
* [Laravel Mix](https://laravel-mix.com/)
* [TailWindCss](https://tailwindcss.com/)

```
npm init -y
```



```
npm install laravel-mix --save-dev
```



```
touch webpack.mix.js && open webpack.mix.js
```

**Add the following code on webpack.mix.js.**

```
let mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');

mix.js(
    'src/app.js', 
    'dist')
    .react()
    .setPublicPath('dist');


mix.postCss(
    './src/css/styles.css',
    './dist/styles.css',
	tailwindcss('./tailwind.config.js')
);

```

```
npm install --save-dev react react-dom
```

```
npm i @babel/preset-react
```

**Update package.json with the following code.** [Taken from here](https://github.com/JeffreyWay/laravel-mix/commit/ea8facd1bd8aadc719f03e7cd03603d4fb797bd1)

```
 "scripts": {
    "dev": "mix",
    "watch": "mix watch",
    "watch-poll": "mix watch -- --watch-options-poll=1000",
    "hot": "mix --hot",
    "prod": "mix --production"
},
```

**Installing TailWindCss**

```
npm install tailwindcss@latest postcss@latest autoprefixer@latest
```

```
npx tailwindcss init
```

**Update tailwind.config.js

```
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
```

```
touch postcss.config.js && open postcss.config.js
```

**Update postcss.config.js with the following code.**

```
module.exports = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
};
```
```
npm i babel-plugin-transform-react-jsx
```

```
npm install @wordpress/element —save
```

```
{
    "plugins": [
        [ 
            "transform-react-jsx", {
                "pragma": "wp.element.createElement",
                "pragmaFrag": "wp.element.Fragment"    
            } 
        ]
    ]
}
```






###Workflow
```
npm run dev
```

For production. (Purge TailwindCSS, Minified JS)

```
npm run prod
```
