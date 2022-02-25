<?php 
function isPrime($n){
    if ($n == 2) {
        return true;
    }
    if ($n%2 == 0){
        return false;
    }
    for ($i=2; $i < $n; $i++) { 
        if(($n%$i) == 0) {
            return false;
        }
    }
    return true;
}

echo isPrime(53) . "\n";

// def isPrime(m): 
// if m%2 == 0:
//     return False
//     for i in range(2, m):
//         if m%i ==0:
//             return False
//             return True 
?> 