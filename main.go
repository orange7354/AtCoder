package main

import "fmt"

func main() {
	var n int
	var a []int = make([]int, n)
	fmt.Scan(&n)

	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}

	var cnt []int
}
