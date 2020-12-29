*** Creating Dev Environment

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

** Add the following code on webpack.mix.js. **

```
let mix = require('laravel-mix');

mix.js('src/app.js', 'dist').react().setPublicPath('dist');
```

```
npm install --save-dev react react-dom
```

```
npm i @babel/preset-react
```

Update package.json with the following code. [Taken from here](https://github.com/JeffreyWay/laravel-mix/commit/ea8facd1bd8aadc719f03e7cd03603d4fb797bd1)

```
 "scripts": {
    "dev": "mix",
    "watch": "mix watch",
    "watch-poll": "mix watch -- --watch-options-poll=1000",
    "hot": "mix --hot",
    "prod": "mix --production"
},
```

** Installing TailWindCss **

```
npm install -D tailwindcss@npm:@tailwindcss/postcss7-compat @tailwindcss/postcss7-compat postcss@^7 autoprefixer@^9
```

```
npx tailwindcss init
```

```
touch postcss.config.js && open postcss.config.js
```

** Update postcss.config.js with the following code. **

```
module.exports = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
};
```
