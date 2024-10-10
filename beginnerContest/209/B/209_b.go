package main

import "fmt"

func main() {
	var n, x int
	fmt.Scan(&n, &x)

	a := make([]int, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}

	var res bool = true
	for i, v := range a {
		if (i+1)%2 == 0 {
			x -= (v - 1)
		} else {
			x -= v
		}
		if i != n-1 && x <= 0 {
			res = false
			break
		} else if i == n-1 && x < 0 {
			res = false
			break
		}
	}

	if res == true {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}
}
