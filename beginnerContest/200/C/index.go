package main

import (
	"fmt"
)

func main() {
	var n int
	fmt.Scan(&n)

	a := make([]int, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}

	//余りをカウントするスライス
	cnt := make([]int, 200)
	ans := 0
	for _, v := range a {
		r := v % 200
		ans += cnt[r]
		cnt[r]++
	}

	fmt.Println(ans)

}
