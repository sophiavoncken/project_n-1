// Initialize the player and move counter
let player = "X";
let moves = 0;
let isFirstCpuMove = true;

/**
 * Handles a player's move when they click a cell.
 * @param {string} id - The ID of the clicked cell.
 */
function playMove(id) {
  const cell = document.getElementById(id);

  // Only allow a move if the cell is empty
  if (cell.src.includes("transp.png")) {
      cell.src = getPlayerImage(player); // Obtenha a imagem correta
      moves++;

      // Check if the move resulted in a win or a draw
      if (checkWin()) {
          setTimeout(() => alert(`Game Over: ${player} wins!`), 10);
          return;
      }

      if (moves === 9) {
          setTimeout(() => alert("Game Over: It's a draw!"), 10);
          return;
      }

      // Switch to the other player
      player = player === "X" ? "O" : "X";

      // If computer mode is enabled and it's the computer's turn, make a move
      if (document.getElementById("cpu").checked && player === "O") {
          if (isFirstCpuMove) {
              // Verifica se o meio (c5) está vazio
              if (getImageSrc("c5") === "transp.png") {
                  playMove("c5"); // O computador marca o meio
                  isFirstCpuMove = false; // Atualiza para que não seja mais a primeira jogada
              } else {
                const pcMove = getBestMove();
                playMove(pcMove);
            }
          } else {
              const pcMove = getBestMove();
              playMove(pcMove);
          }
      }
  }
}

/**
 * Checks if there is a winning combination on the board.
 * @returns {boolean} - True if a win is detected, otherwise false.
 */
function checkWin() {
  const winPatterns = [
      ["c1", "c2", "c3"],
      ["c4", "c5", "c6"],
      ["c7", "c8", "c9"],
      ["c1", "c4", "c7"],
      ["c2", "c5", "c8"],
      ["c3", "c6", "c9"],
      ["c1", "c5", "c9"],
      ["c3", "c5", "c7"],
  ];

  return winPatterns.some(pattern => {
      const [a, b, c] = pattern;
      return (
          getImageSrc(a) === getImageSrc(b) &&
          getImageSrc(b) === getImageSrc(c) &&
          getImageSrc(a) !== "transp.png"
      );
  });
}

/**
 * Retrieves the image filename for a given cell.
 * @param {string} id - The ID of the cell.
 * @returns {string} - The filename of the image in the cell.
 */
function getImageSrc(id) {
  const src = document.getElementById(id).src;
  return src.substring(src.lastIndexOf("/") + 1);
}

/**
 * Finds the best move for the computer.
 * @returns {string} - The ID of the cell for the computer's move.
 */
function getBestMove() {
  const emptyCells = [];
  for (let i = 1; i <= 9; i++) {
      if (getImageSrc(`c${i}`) === "transp.png") {
          emptyCells.push(`c${i}`);
      }
  }

  // Check for a winning move
  for (const cell of emptyCells) {
      document.getElementById(cell).src = getPlayerImage("O"); // Simulate computer's move
      if (checkWin()) {
          document.getElementById(cell).src = "img/transp.png"; // Undo move
          return cell; // Return winning move
      }
      document.getElementById(cell).src = "img/transp.png"; // Undo move
  }

  // Check for a blocking move
  for (const cell of emptyCells) {
      document.getElementById(cell).src = getPlayerImage("X"); // Simulate player's move
      if (checkWin()) {
          document.getElementById(cell).src = "img/transp.png"; // Undo move
          return cell; // Return blocking move
      }
      document.getElementById(cell).src = "img/transp.png"; // Undo move
  }

  // If no winning or blocking move, return a random empty cell
  return emptyCells[Math.floor(Math.random() * emptyCells.length)];
}

/**
 * Resets the game to its initial state.
 */
function resetGame() {
  for (let i = 1; i <= 9; i++) {
      document.getElementById(`c${i}`).src = "img/transp.png";
  }
  player = "X";
  moves = 0;
  isFirstCpuMove = true;
}























const images = {
    "one-piece": {
        "X": "img/X_one_piece.png",
        "O": "img/O_one_piece.png"
    },
    "death": {
        "X": "img/X_death.png",
        "O": "img/O_death.png"
    },
    "gow": {
        "X": "img/X_gow.png",
        "O": "img/O_gow.png"
    },
    "dragon-ball": {
        "X": "img/X_dragon_ball.png",
        "O": "img/O_dragon_ball.png"
    },
    "bleach": {
        "X": "img/X_bleach.png",
        "O": "img/O_bleach.png"
    }
};

function changeTheme(theme) {
  // Remove todas as classes
  document.body.classList.remove('one-piece', 'death', 'gow', 'dragon-ball', 'bleach');
  
  // Adiciona a classe escolhida
  document.body.classList.add(theme);
  resetGame();
}

function getPlayerImage(player) {
  const currentTheme = getCurrentTheme();
  return images[currentTheme][player];
}

function getCurrentTheme() {
  if (document.body.classList.contains('one-piece')) {
      return 'one-piece';
  } else if (document.body.classList.contains('death')) {
      return 'death';
  } else if (document.body.classList.contains('dragon-ball')) {
      return 'dragon-ball';
  } else if (document.body.classList.contains('gow')) {
      return 'gow';
  }
}