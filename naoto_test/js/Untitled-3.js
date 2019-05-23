particlesJS('hoge',{
 //シェイプの設定 hogeに対して作動  value 図形の数 value_area 表示スペースの大きさ
  "particles": {
    "number": {
      "value": 10,
      "density": {
        "enable": true,
        "value_area": 500
      }
    },
    "color": {
      "value":["665ef6"]
      
		
    }, 
//	  "circle", "triangle", "edge"
    "shape": {
      "type": ["circle"],
		// polygonで多角形  
		//stroke で図形の枠 
      "stroke": {
        "width": 0,
        "color": ["#ffffff"]
      },
      "polygon": {
        "nb_sides": 0
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
//アニメーションの設定
"opacity": {
  "value": 0.3,
  "random": true,
  "anim": {
	"enable": false,
	"speed": 1,
	"opacity_min": 0.1,
	"sync": false
  }
		},
    "size": {
      "value": 80,
      "random": false,
      "anim": {
        "enable": true,
        "speed": 10,
        "size_min": 40,
        "sync": false
      }
    },
//図形どうしを線で繋ぐ
    "line_linked": {
      "enable": false,
      "distance": 200,
      "color": "#ffffff",
      "opacity": 1,
      "width": 2
    },
//実際の動き
    "move": {
      "enable": true,
      "speed": 8,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  // 各操作に関する設定
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "grad"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 1,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 0
      },
      "remove": {
        "particles_nb": 0
      }
    }
  },
  "retina_detect": true
}
);