// Set flag to include Preflight conditionally based on the build target.
const includePreflight = ( 'editor' === process.env._TW_TARGET ) ? false : true;

module.exports = {
	presets: [
		// Manage Tailwind Typography's configuration in a separate file.
		require( './tailwind-typography.config.js' ),
	],
	content: [
		// Ensure changes to PHP files and `theme.json` trigger a rebuild.
		'./theme/**/*.php',
		'./theme/theme.json',
	],
	theme: {
		fontSize: {
      'xs': '.75rem',
      'sm': '.875rem',
      'tiny': '.875rem',
      'base': '1rem',
      'lg': '1.125rem',
      'xl': '1.25rem',
      '2xl': '1.5rem',
      '3xl': ['2.625rem', '1.3'],
      '4xl': '4.1rem',
      '5xl': ['6.8rem', '1'],
      '6xl': ['8rem', '1'],
      '7xl': ['13rem', '1'],
    },
		container: {
      center: true,
    },
		// Extend the default Tailwind theme
		extend: {
			colors: {
				'dark': '#2C3639',
				'light': '#DCD7C9',
				'secondary': '#3F4E4F',
				'accent': '#E68333',
			},
			fontFamily: {
				'heading': 'Heliuk',
				'body': 'Neue Montreal',
				'bodybold': 'Neue Montreal-Bold'
			},
			borderRadius: {
				'4xl': '32px'
			}
		},
	},
	corePlugins: {
		// Disable Preflight base styles in CSS targeting the editor.
		preflight: includePreflight,
	},
	plugins: [
		// Add Tailwind Typography.
		require( '@tailwindcss/typography' ),

		// Extract colors and widths from `theme.json`.
		require( '@_tw/themejson' )( require( '../theme/theme.json' ) ),

		// Uncomment below to add additional first-party Tailwind plugins.
		// require( '@tailwindcss/aspect-ratio' ),
		// require( '@tailwindcss/forms' ),
		// require( '@tailwindcss/line-clamp' ),
	],
};
