module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          backgroundImage: theme => ({
            'hero-bg': "url('../../imgs/home-bannner.webp')",
           
        }),
    
        colors: {
        
          'primary-one': '#0c98d8', //blue
          'primary-two': '#231f20', //black
          'primary-three': '#FF8A17', //orange
          'primary-four' : '#56CAFF',  //light blue
        },
    
        },
    
      },
      plugins: [],
}
