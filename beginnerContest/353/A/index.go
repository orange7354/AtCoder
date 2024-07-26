package main

import "fmt"

func main() {
	var n int
	fmt.Scan(&n)
	slice := make([]int, n)
	for i := range slice {
		fmt.Scan(&slice[i])
	}

	var result int = -1

	for i := 1; i < n; i++ {
		if slice[i] > slice[0] {
			result = i
			break
		}
	}

	if result == -1 {
		fmt.Println(result)
	} else {
		fmt.Println(result + 1)
	}
}
