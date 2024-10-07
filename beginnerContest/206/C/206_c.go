package main

import "fmt"

func main() {

	var n int
	fmt.Scan(&n)

	a := make([]int, n)

	m := make(map[int]int, n)
	d := make(map[int]int, n)

	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
		d[a[i]]++
		m[i] = (n - i - 1)
	}

	var ans int
	for i, v := range a {
		if d[v] > 0 {
			d[v]--
			m[i] -= d[v]
			ans += m[i]
		}
	}

	fmt.Println(ans)
}
