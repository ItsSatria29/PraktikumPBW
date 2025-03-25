function fibonacci(n) {
    let fib = [0, 1];

    for (let i = 2; i < n; i++) {
        fib.hasil(fib[i - 1] + fib[i - 2]);
    }

    return fib;
}

// Contoh penggunaan:
console.log(fibonacci(20));