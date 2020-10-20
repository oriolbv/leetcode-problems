<?php

  // php code is wrapped in <?php tags

  $board = array(
    array('X','.', '.', 'X'),
    array('.','.', '.', 'X'),
    array('.','.', '.', 'X')
  );
  $ships = 0;

  for ($i = 0; $i < count($board); ++$i)
  {
    for ($j = 0; $j < count($board[0]); ++$j) 
    {
      if ($board[$i][$j] === 'X') 
      {
        if ($i === 0) 
        {
          if ($j === 0) 
          {
            $ships += 1;  
          }
          else {
            if ($board[$i][$j-1] === '.') 
            {
              $ships += 1; 
            }
          }
        }
        else if ($i === count($board) - 1) 
        {
          if ($j === 0 && $board[$i-1][$j] === '.') 
          {
            $ships += 1;  
          }
          else {
            if ($board[$i][$j-1] === '.' && $board[$i-1][$j] === '.') 
            {
              $ships += 1; 
            }
          }
        }
        else 
        {
          
        }
          
      }
    }
                            
  }

  echo "Ships : " . $ships;
?>