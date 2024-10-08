package main

import "fmt"

func main() {
	var a, b, c, d int

	fmt.Scan(&a, &b, &c, &d)

	var m map[string]int = map[string]int{
		"Red":  0,
		"blue": 0,
	}

	m["blue"] += a
	var i int
	for m["blue"] > m["Red"]*d {
		m["blue"] += b
		m["Red"] += c
		i++
		if i == 100001 {
			i = -1
			break
		}
	}

	fmt.Println(i)

}
