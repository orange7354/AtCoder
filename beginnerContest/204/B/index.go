package main

import "fmt"

func main() {
	var n int
	fmt.Scan(&n)

	var ans int

	a := make([]int, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
		if a[i] > 10 {
			ans += a[i] - 10
		}
	}

	fmt.Println(ans)

}
