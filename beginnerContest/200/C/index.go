package main

import "fmt"

func main() {
	var n int
	var a []int
	fmt.Scan(&n)

	a = make([]int, n)

	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}

	cnt := make([]int, 200)
	var ans int = 0
	for j := 0; j < n; j++ {
		r := a[j] % 200
		ans += cnt[r]
		cnt[r]++
	}

	fmt.Println(ans)

}
