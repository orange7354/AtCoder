package main

import "fmt"

func main() {
	var n, k int
	fmt.Scan(&n, &k)
	a := make([]int, n)
	for i := 0; i < n; i++ {
		fmt.Scan(&a[i])
	}

	var temp int = 0
	var result int = 0
	var index = 0
	for index < n {
		if a[index]+temp < k {
			temp += a[index]
			if index == n-1 {
				result++
				break
			} else {
				index++
			}
		} else {
			temp = 0
			result++
		}

	}

	fmt.Println(result)
}
