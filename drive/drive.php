<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/static/img/favicon.png" />
  <link rel="stylesheet" href="/static/css/construction.css" />
  <title>Drive</title>
  <style>
    canvas {
      width: 100%;
      height: 100%
    }
  </style>
  <!-- You might will need to activate WebGL in your browser -->
  <script src="/static/js/three.min.js"></script>
</head>

<body>
  <div id='centered'></div>
  <script>
    // Set the scene size.
    const WIDTH = 800;
    const HEIGHT = 500;
    var scene = new THREE.Scene();
    var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 1, 10000);
    var renderer = new THREE.WebGLRenderer();

    //scene.background = new THREE.Color(0xaeaeae);
    renderer.setSize(WIDTH, HEIGHT);
    document.getElementById('centered').appendChild(renderer.domElement);
    var material = new THREE.MeshBasicMaterial({
      color: 0xabcabcff,
      wireframe: true
    });
    var material1 = new THREE.MeshBasicMaterial({
      color: 0xabcdefff,
      wireframe: true
    });
    var geometry = new THREE.BoxGeometry(700, 700, 700, 0, 0, 0);
    var geometry1 = new THREE.BoxGeometry(1200, 700, 700, 0, 0, 0);
    var cube = new THREE.Mesh(geometry, material);
    var cube1 = new THREE.Mesh(geometry1, material1);
    scene.add(cube);
    scene.add(cube1);
    camera.position.z = 1500;
    camera.position.x = 500;
    cube.rotation.x += 5;
    cube1.rotation.x += 5;

    cube1.position.x += 1000;

    function render() {
      requestAnimationFrame(render);

      cube.rotation.x -= 0.01;
      cube.rotation.y += 0.01;
      cube1.rotation.x += 0.01;
      cube1.rotation.y -= 0.01;
      renderer.render(scene, camera);
    };
    render();
  </script>
</body>

</html>