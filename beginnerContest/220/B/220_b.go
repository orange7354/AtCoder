package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanWords)
	k := number(sc)
	n := numbers(2, sc)
	a := n[0]
	b := n[1]

	sa := 0
	for i, v := range digit(a, []int{}) {
		sa += v * pow(k, i)
	}

	sb := 0
	for i, v := range digit(b, []int{}) {
		sb += v * pow(k, i)
	}

	fmt.Println(sa * sb)
}

func digit(i int, list []int) []int {
	if i > 0 {
		return digit(i/10, append(list, i%10))
	}package main

import (
	"bufio"
	"fmt"
	"os"
	"strconv"
)

func main() {
	sc := bufio.NewScanner(os.Stdin)
	sc.Split(bufio.ScanWords)
	k := number(sc)
	n := numbers(2, sc)
	a := n[0]
	b := n[1]

	sa := 0
	for i, v := range digit(a, []int{}) {
		sa += v * pow(k, i)
	}

	sb := 0
	for i, v := range digit(b, []int{}) {
		sb += v * pow(k, i)
	}

	fmt.Println(sa * sb)
}

func digit(i int, list []int) []int {
	if i > 0 {
		return digit(i/10, append(list, i%10))
	}
	return list
}

func pow(a, b int) int {
	if b == 0 {
		return 1
	}
	r := 1
	for i := 0; i < b; i++ {
		r *= a
	}
	return r
}

func number(sc *bufio.Scanner) int {
	sc.Scan()
	s, _ := strconv.Atoi(sc.Text())
	return s
}

func numbers(size int, sc *bufio.Scanner) []int {
	s := make([]int, size)
	for i := 0; i < size; i++ {
		sc.Scan()
		a, _ := strconv.Atoi(sc.Text())
		s[i] = a
	}

	return s
}

	return list
}

func pow(a, b int) int {
	if b == 0 {
		return 1
	}
	r := 1
	for i := 0; i < b; i++ {
		r *= a
	}
	return r
}

func number(sc *bufio.Scanner) int {
	sc.Scan()
	s, _ := strconv.Atoi(sc.Text())
	return s
}

func numbers(size int, sc *bufio.Scanner) []int {
	s := make([]int, size)
	for i := 0; i < size; i++ {
		sc.Scan()
		a, _ := strconv.Atoi(sc.Text())
		s[i] = a
	}

	return s
}
