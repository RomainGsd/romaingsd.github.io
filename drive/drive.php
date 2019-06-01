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
    var camera = new THREE.PerspectiveCamera(75, WIDTH / HEIGHT, 1, 10000);
    var renderer = new THREE.WebGLRenderer();
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.body.appendChild(renderer.domElement);
    var geometry = new THREE.BoxGeometry(700, 700, 700, 10, 10, 10);
    var material = new THREE.MeshBasicMaterial({
        color: 0xfffff,
        wireframe: true
    });
    var cube = new THREE.Mesh(geometry, material);
    scene.add(cube);
    camera.position.z = 1000;

    function render() {
        requestAnimationFrame(render);
        cube.rotation.x += 0.01;
        cube.rotation.y += 0.01;
        renderer.render(scene, camera);
    };
    render();
    </script>
</body>

</html>