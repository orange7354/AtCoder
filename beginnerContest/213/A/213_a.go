package main

import "fmt"

func main() {
	var A, B int
	fmt.Scan(&A, &B)
	for c := 0; c < 256; c++ {
		if c == (A ^ B) {
			fmt.Println(c)
			break
		}
	}
}
