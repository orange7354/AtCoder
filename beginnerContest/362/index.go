package main

import "fmt"

// Buy a pen

func main() {
	var r, g, b int
	var c string
	fmt.Scan(&r, &g, &b)
	fmt.Scan(&c)

	if c == "Blue" {
		if r >= g {
			fmt.Println(g)
		} else {
			fmt.Println(r)
		}
	} else if c == "Red" {
		if g >= b {
			fmt.Println(b)
		} else {
			fmt.Println(g)
		}
	} else if c == "Green" {
		if r >= b {
			fmt.Println(b)
		} else {
			fmt.Println(r)
		}
	}

}
