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
      '3xl': ['1.8rem'],
      '4xl': ['2.625rem', '1.3'], //48
      '5xl': ['4.25rem'], //67
      '6xl': ['6.875rem'], //109
      '7xl': ['11.125rem', '0.7'], //177
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
				'heading': 'Right Grotesk-TallBold',
				'body': 'Neue Montreal',
				'bodybold': 'Neue Montreal-Bold'
			},
			borderRadius: {
				'4xl': '32px'
			},
			lineHeight: {
        '1': '0.55',
				'2': '0.6',
				'2.5': '0.7',
				'3': '0.8',
				'3.5': '0.9',
      },
			width: {
        'fit-content': 'fit-content',
      },
			height: {
        'fit-content': 'fit-content',
      },
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
