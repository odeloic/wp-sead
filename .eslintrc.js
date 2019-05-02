module.exports = {
  'extends': ['eslint:recommended', 'google'],
  'env': {
    // For more environments, see here: http://eslint.org/docs/user-guide/configuring.html#specifying-environments
    'browser': true,
    'es6': true
  },
  'rules': {
    // Insert custom rules here
    // For more rules, see here: http://eslint.org/docs/rules/
    'no-var': 'warn',
    'require-jsdoc': 'off',
    'no-unused-vars': 'off',
    'space-before-function-paren': 'off',
    'no-trailing-spaces': 'off',
    'quotes': 'off',
    'comma-dangle': 'off',
    'no-var': 'off',
    'no-invalid-this': 'off',
    'one-var': 'off',
    'no-undef': 'off'
  },
  'parserOptions': {
    'sourceType': 'module'
  }
}
