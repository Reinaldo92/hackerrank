'use strict';

process.stdin.resume();
process.stdin.setEncoding('utf-8');

let inputString = '';
let currentLine = 0;

process.stdin.on('data', function(inputStdin) {
    inputString += inputStdin;
});

process.stdin.on('end', function() {
    inputString = inputString.split('\n');

    main();
});

function readLine() {
    return inputString[currentLine++];
}

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase(n) {
    // Write your code here
     var i = 1
    while (i <= n) {
        var a = " ".repeat(n - i)
        var b = "#".repeat(i)
        console.log(a + b)
        i++
    }

}

function main() {
    const n = parseInt(readLine().trim(), 10);

    staircase(n);
}
