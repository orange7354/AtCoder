package main

import "fmt"

func main() {
	var n int
	fmt.Scan(&n)

	m := make(map[int]int, n)

	for i := 0; i < n; i++ {
		var a int
		fmt.Scan(&a)
		m[i+1] = a
	}

	ans := true
	for i := 0; i < n; i++ {
		var b int
		fmt.Scan(&b)

		if m[b] != i+1 {
			ans = false
			break
		}
	}

	if ans {
		fmt.Println("Yes")

	} else {
		fmt.Println("No")
	}

}
