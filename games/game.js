var config = {
  type: Phaser.AUTO,
  width: 800,
  height: 500,
  pixelArt: true,
  parent: 'game-canvas',
  physics: {
      default: "arcade",
      arcade:{
          gravity: {y: 1500}
      }
  },
  scene: [StartScene]
}

const game = new Phaser.Game(config);