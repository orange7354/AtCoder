package main

import "fmt"

func main() {
	var n, a, x, y int

	fmt.Scan(&n, &a, &x, &y)

	var sum int = 0
	if n > a {
		sum += a * x
		sum += (n - a) * y
	} else {
		sum += n * x
	}

	fmt.Println(sum)
}
