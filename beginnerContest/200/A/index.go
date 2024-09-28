package main

import "fmt"

func main() {
	var n int

	fmt.Scan(&n)

	var x int = n / 100

	var y int = n % 100

	if y >= 1 {
		x++
	}

	fmt.Println(x)

}
