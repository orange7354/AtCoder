package main

import "fmt"

func main() {
	var s string
	fmt.Scan(&s)

	m := make(map[string]bool, 3)
	for _, v := range []rune(s) {
		m[string(v)] = true
	}

	if len(m) == 1 {
		fmt.Println(1)
	} else if len(m) == 2 {
		fmt.Println(3)
	} else {
		fmt.Println(6)
	}
}
