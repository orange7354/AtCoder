package main

import "fmt"

func main() {

	var n int
	var b bool = true
	var i int
	var sum int
	fmt.Scan(&n)
	for b {
		i++
		sum += i
		if sum >= n {
			break
		}
	}

	fmt.Println(i)
}
