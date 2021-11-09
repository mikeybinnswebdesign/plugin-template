import postcss from "rollup-plugin-postcss";
import { terser } from "rollup-plugin-terser";
import cleaner from "rollup-plugin-cleaner";
const wordpress_files = "./../server/app/public/",
plugin_location = `${wordpress_files}wp-content/plugins/%%PLUGIN_NAME_SLUG%%/`;

export default {
	input: {
		"assets/js/site": "./src/js/site.js",
	},
	output: [
		{
			dir: "./build/assets/",
			format: "esm",
			entryFileNames: "[name].[hash].min.js",
			plugins: [terser()],
		},
		{
			dir: plugin_location,
			format: "esm",
			entryFileNames: "[name].[hash].min.js",
			plugins: [terser()],
		},
	],
	plugins: [
		cleaner({
			targets: ["./build/", plugin_location],
		}),
		postcss({
			extract: "css/style.css",
			sourceMap: true,
			config: {
				path: "./postcss.config.js",
			},
		}),
	],
};
