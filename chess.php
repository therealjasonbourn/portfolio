<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jason Bourn's Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chess.css">
    <script src="javascript/javascript.js"></script>
</head>

<body>
    <header id="header">
        <div class="container">
            <h1>ANN Chess</h1>
        </div>
    </header>
    <a href="index.php" class="home-button">Home</a>
    <nav>
        <ul class="nav-links">
            <!--<li><a href="#tap-me">TapMe</a></li>
            <li><a href="#where-in-the-world">Where in the World</a></li>-->
        </ul>
    </nav>
    <main>
        <div id="game-container">
            <div id="status">White's turn</div>
            <div id="board"></div>
            <button id="reset">Reset Game</button>
        </div>
        <div class="chess-body">
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                const board = document.getElementById('board');
                const statusElement = document.getElementById('status');
                const resetButton = document.getElementById('reset');
                
                let selectedPiece = null;
                let currentTurn = 'white';
                let validMoves = [];
                
                // Piece Unicode symbols
                const pieces = {
                    'white': {
                    'pawn': '♙',
                    'rook': '♖',
                    'knight': '♘',
                    'bishop': '♗',
                    'queen': '♕',
                    'king': '♔'
                    },
                    'black': {
                    'pawn': '♟',
                    'rook': '♜',
                    'knight': '♞',
                    'bishop': '♝',
                    'queen': '♛',
                    'king': '♚'
                    }
                };
                
                // Initialize the board state
                let boardState = Array(8).fill().map(() => Array(8).fill(null));
                
                function initializeBoard() {
                    // Clear the board
                    board.innerHTML = '';
                    boardState = Array(8).fill().map(() => Array(8).fill(null));
                    
                    // Create squares
                    for (let row = 0; row < 8; row++) {
                    for (let col = 0; col < 8; col++) {
                        const square = document.createElement('div');
                        square.className = `square ${(row + col) % 2 === 0 ? 'light' : 'dark'}`;
                        square.dataset.row = row;
                        square.dataset.col = col;
                        square.addEventListener('click', handleSquareClick);
                        board.appendChild(square);
                    }
                    }
                    
                    // Set up pieces
                    setupPieces();
                    
                    // Reset game state
                    selectedPiece = null;
                    currentTurn = 'white';
                    validMoves = [];
                    updateStatus();
                }
                
                function setupPieces() {
                    // Set up pawns
                    for (let col = 0; col < 8; col++) {
                    placePiece(1, col, 'black', 'pawn');
                    placePiece(6, col, 'white', 'pawn');
                    }
                    
                    // Set up rooks
                    placePiece(0, 0, 'black', 'rook');
                    placePiece(0, 7, 'black', 'rook');
                    placePiece(7, 0, 'white', 'rook');
                    placePiece(7, 7, 'white', 'rook');
                    
                    // Set up knights
                    placePiece(0, 1, 'black', 'knight');
                    placePiece(0, 6, 'black', 'knight');
                    placePiece(7, 1, 'white', 'knight');
                    placePiece(7, 6, 'white', 'knight');
                    
                    // Set up bishops
                    placePiece(0, 2, 'black', 'bishop');
                    placePiece(0, 5, 'black', 'bishop');
                    placePiece(7, 2, 'white', 'bishop');
                    placePiece(7, 5, 'white', 'bishop');
                    
                    // Set up queens
                    placePiece(0, 3, 'black', 'queen');
                    placePiece(7, 3, 'white', 'queen');
                    
                    // Set up kings
                    placePiece(0, 4, 'black', 'king');
                    placePiece(7, 4, 'white', 'king');
                }
                
                function placePiece(row, col, color, type) {
                    const square = getSquare(row, col);
                    square.textContent = pieces[color][type];
                    boardState[row][col] = { color, type };
                }
                
                function getSquare(row, col) {
                    return board.querySelector(`[data-row="${row}"][data-col="${col}"]`);
                }
                
                function handleSquareClick(event) {
                    const row = parseInt(event.currentTarget.dataset.row);
                    const col = parseInt(event.currentTarget.dataset.col);
                    const piece = boardState[row][col];
                    
                    // Clear previous selections and valid moves
                    clearHighlights();
                    
                    // If a piece is already selected, try to move it
                    if (selectedPiece) {
                    const fromRow = selectedPiece.row;
                    const fromCol = selectedPiece.col;
                    
                    // Check if the clicked square is a valid move
                    const moveIndex = validMoves.findIndex(move => 
                        move.row === row && move.col === col
                    );
                    
                    if (moveIndex !== -1) {
                        // Move the piece
                        const movingPiece = boardState[fromRow][fromCol];
                        boardState[fromRow][fromCol] = null;
                        boardState[row][col] = movingPiece;
                        
                        // Update the visual representation
                        getSquare(fromRow, fromCol).textContent = '';
                        getSquare(row, col).textContent = pieces[movingPiece.color][movingPiece.type];
                        
                        // Check for pawn promotion
                        if (movingPiece.type === 'pawn' && (row === 0 || row === 7)) {
                        boardState[row][col].type = 'queen'; // Auto-promote to queen for simplicity
                        getSquare(row, col).textContent = pieces[movingPiece.color]['queen'];
                        }
                        
                        // Switch turns
                        currentTurn = currentTurn === 'white' ? 'black' : 'white';
                        updateStatus();
                        
                        // Reset selection
                        selectedPiece = null;
                        validMoves = [];
                        return;
                    }
                    
                    // If not a valid move, deselect the current piece
                    selectedPiece = null;
                    }
                    
                    // Select a new piece if it belongs to the current player
                    if (piece && piece.color === currentTurn) {
                    selectedPiece = { row, col, ...piece };
                    getSquare(row, col).classList.add('selected');
                    
                    // Calculate and show valid moves
                    validMoves = calculateValidMoves(row, col, piece);
                    showValidMoves();
                    }
                }
                
                function calculateValidMoves(row, col, piece) {
                    const moves = [];
                    
                    switch (piece.type) {
                    case 'pawn':
                        // Pawns move differently based on color
                        const direction = piece.color === 'white' ? -1 : 1;
                        const startRow = piece.color === 'white' ? 6 : 1;
                        
                        // Forward move
                        if (isInBounds(row + direction, col) && boardState[row + direction][col] === null) {
                        moves.push({ row: row + direction, col, capture: false });
                        
                        // Double move from starting position
                        if (row === startRow && boardState[row + 2 * direction][col] === null) {
                            moves.push({ row: row + 2 * direction, col, capture: false });
                        }
                        }
                        
                        // Captures
                        for (let colDiff of [-1, 1]) {
                        const newCol = col + colDiff;
                        if (isInBounds(row + direction, newCol)) {
                            const targetPiece = boardState[row + direction][newCol];
                            if (targetPiece && targetPiece.color !== piece.color) {
                            moves.push({ row: row + direction, col: newCol, capture: true });
                            }
                        }
                        }
                        break;
                        
                    case 'rook':
                        // Horizontal and vertical moves
                        addStraightMoves(row, col, piece.color, moves);
                        break;
                        
                    case 'knight':
                        // L-shaped moves
                        const knightMoves = [
                        {row: row-2, col: col-1}, {row: row-2, col: col+1},
                        {row: row-1, col: col-2}, {row: row-1, col: col+2},
                        {row: row+1, col: col-2}, {row: row+1, col: col+2},
                        {row: row+2, col: col-1}, {row: row+2, col: col+1}
                        ];
                        
                        for (const move of knightMoves) {
                        if (isInBounds(move.row, move.col)) {
                            const targetPiece = boardState[move.row][move.col];
                            if (targetPiece === null || targetPiece.color !== piece.color) {
                            moves.push({ 
                                row: move.row, 
                                col: move.col, 
                                capture: targetPiece !== null 
                            });
                            }
                        }
                        }
                        break;
                        
                    case 'bishop':
                        // Diagonal moves
                        addDiagonalMoves(row, col, piece.color, moves);
                        break;
                        
                    case 'queen':
                        // Combination of rook and bishop moves
                        addStraightMoves(row, col, piece.color, moves);
                        addDiagonalMoves(row, col, piece.color, moves);
                        break;
                        
                    case 'king':
                        // One square in any direction
                        for (let rowDiff = -1; rowDiff <= 1; rowDiff++) {
                        for (let colDiff = -1; colDiff <= 1; colDiff++) {
                            if (rowDiff === 0 && colDiff === 0) continue;
                            
                            const newRow = row + rowDiff;
                            const newCol = col + colDiff;
                            
                            if (isInBounds(newRow, newCol)) {
                            const targetPiece = boardState[newRow][newCol];
                            if (targetPiece === null || targetPiece.color !== piece.color) {
                                moves.push({ 
                                row: newRow, 
                                col: newCol, 
                                capture: targetPiece !== null 
                                });
                            }
                            }
                        }
                        }
                        break;
                    }
                    
                    return moves;
                }
                
                function addStraightMoves(row, col, pieceColor, moves) {
                    // Horizontal and vertical directions
                    const directions = [
                    {row: -1, col: 0}, // Up
                    {row: 1, col: 0},  // Down
                    {row: 0, col: -1}, // Left
                    {row: 0, col: 1}   // Right
                    ];
                    
                    for (const dir of directions) {
                    let newRow = row + dir.row;
                    let newCol = col + dir.col;
                    
                    while (isInBounds(newRow, newCol)) {
                        const targetPiece = boardState[newRow][newCol];
                        
                        if (targetPiece === null) {
                        // Empty square
                        moves.push({ row: newRow, col: newCol, capture: false });
                        } else {
                        // Occupied square
                        if (targetPiece.color !== pieceColor) {
                            // Can capture opponent's piece
                            moves.push({ row: newRow, col: newCol, capture: true });
                        }
                        // Stop in either case
                        break;
                        }
                        
                        newRow += dir.row;
                        newCol += dir.col;
                    }
                    }
                }
                
                function addDiagonalMoves(row, col, pieceColor, moves) {
                    // Diagonal directions
                    const directions = [
                    {row: -1, col: -1}, // Up-left
                    {row: -1, col: 1},  // Up-right
                    {row: 1, col: -1},  // Down-left
                    {row: 1, col: 1}    // Down-right
                    ];
                    
                    for (const dir of directions) {
                    let newRow = row + dir.row;
                    let newCol = col + dir.col;
                    
                    while (isInBounds(newRow, newCol)) {
                        const targetPiece = boardState[newRow][newCol];
                        
                        if (targetPiece === null) {
                        // Empty square
                        moves.push({ row: newRow, col: newCol, capture: false });
                        } else {
                        // Occupied square
                        if (targetPiece.color !== pieceColor) {
                            // Can capture opponent's piece
                            moves.push({ row: newRow, col: newCol, capture: true });
                        }
                        // Stop in either case
                        break;
                        }
                        
                        newRow += dir.row;
                        newCol += dir.col;
                    }
                    }
                }
                
                function isInBounds(row, col) {
                    return row >= 0 && row < 8 && col >= 0 && col < 8;
                }
                
                function showValidMoves() {
                    for (const move of validMoves) {
                    const square = getSquare(move.row, move.col);
                    if (move.capture) {
                        square.classList.add('capturable');
                    } else {
                        square.classList.add('valid-move');
                    }
                    }
                }
                
                function clearHighlights() {
                    const squares = board.querySelectorAll('.square');
                    squares.forEach(square => {
                    square.classList.remove('selected', 'valid-move', 'capturable');
                    });
                }
                
                function updateStatus() {
                    statusElement.textContent = `${currentTurn.charAt(0).toUpperCase() + currentTurn.slice(1)}'s turn`;
                }
                
                // Reset button event listener
                resetButton.addEventListener('click', initializeBoard);
                
                // Initialize the board when the page loads
                initializeBoard();
                });
            </script>        
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Jason Bourn. All rights reserved.</p>
    </footer>
</body>
</html>