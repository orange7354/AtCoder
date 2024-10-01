package main

import "fmt"

func main() {
	var n int
	fmt.Scan(&n)

	var a, b, c []int

	a = make([]int, n)
	b = make([]int, n)
	c = make([]int, n)

	t := make(map[int]int)
	r := make(map[int]int)

	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
		t[a[i]]++
	}

	for i := 0; i < n; i++ {
		fmt.Scan(&b[i])
		r[i+1] = b[i]
	}

	ans := 0
	for i := 0; i < n; i++ {
		fmt.Scan(&c[i])
		if t[r[c[i]]] > 0 {
			ans += t[r[c[i]]]
		}
	}

	fmt.Println(ans)

}
