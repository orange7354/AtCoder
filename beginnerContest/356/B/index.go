package main

import "fmt"

func main() {
	var n, m int
	fmt.Scan(&n, &m)

	A := make([]int, m)
	for i := 0; i < m; i++ {
		fmt.Scan(&A[i])
	}

	x := make([][]int, n)
	for i := 0; i < n; i++ {
		temp := make([]int, m)
		for j := 0; j < m; j++ {
			fmt.Scan(&temp[j])
		}
		x[i] = temp
	}

	var result bool = true
	for k, v := range A {
		var sum int
		for i := 0; i < n; i++ {
			sum += x[i][k]
		}

		if sum < v {
			result = false
			break
		}
	}

	if result {
		fmt.Println("Yes")
	} else {
		fmt.Println("No")
	}

	fmt.Println(result)

}
