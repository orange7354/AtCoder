package main

import "fmt"

func main() {
	var n, k, x int
	fmt.Scan(&n, &k, &x)

	A := make([]int, n)

	for i := 0; i < n; i++ {
		fmt.Scan(&A[i])
	}

	newA := make([]int, n+1)

	for i, v := range A {

		if i == k-1 {
			newA[i] = v
			newA[i+1] = x
		} else if i > k-1 {
			newA[i+1] = v
		} else {
			newA[i] = v
		}
	}

	for _, v := range newA {
		fmt.Print(v)
		fmt.Print(" ")
	}
}
