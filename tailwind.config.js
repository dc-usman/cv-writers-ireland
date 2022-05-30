module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          backgroundImage: theme => ({
            'hero-bg': "url('../../imgs/home-bannner.svg')",
           
        }),
    
        colors: {
        
          'primary-one': '#B16B49', //brown
          'primary-two': '#231f20', //black
          'primary-three': '#FF8A17', //orange
          'primary-four' : '#6A402B',  //light blue
        },
    
        },
    
      },
      plugins: [],
}
