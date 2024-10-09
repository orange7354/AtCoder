package main

import "fmt"

func main() {
	var p int
	fmt.Scan(&p)

	a := make([]int, 10)

	for i := 1; i <= 10; i++ {
		a[i-1] = Factorial(i)
	}

	var sum int
	for i := 9; i >= 0; i-- {
		v := a[i]
		if v <= p {
			tmp := p % v
			sum += p / v
			p = tmp
		}
	}

	fmt.Println(sum)
}

// Factorial returns n!.
func Factorial(n int) int {
	res := 1

	for i := 1; i <= n; i++ {
		res *= i
	}

	return res
}
