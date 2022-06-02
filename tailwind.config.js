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
            'hero-bg-one': "url('../../imgs/cv-writings-ireland.jpg')",
            'hero-bg-two': "url('../../imgs/resume1-scaled.jpg')",
            'hero-bg-three':"url('../../imgs/cv-writers-ireland-image-3.png')"
           
        }),
    
        colors: {
        
          'primary-one': '#B16B49', //brown
          'primary-two': '#231f20', //black
          'primary-three': '#FF8A17', //orange
          'primary-four' : '#6A402B',  //light blue
          // light-pink:'#E9BC92'
          // light-brown:'#D8A06D'
          // pink:'#EC8F81'
          // gray:'#B6A286'
          'primary-light':'#B8795B',
          'primary-dark': '#7B4A33',
        },
    
        },
    
      },
      plugins: [],
}
