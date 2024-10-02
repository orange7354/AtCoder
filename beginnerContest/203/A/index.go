package main

import "fmt"

func main() {

	var a, b, c int

	fmt.Scan(&a, &b, &c)

	if a == b {
		fmt.Println(c)
	} else if b == c {
		fmt.Println(a)
	} else if a == c {
		fmt.Println(b)
	} else {
		fmt.Println(0)
	}
}
