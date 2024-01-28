
console.log("[A] 🦖 MAINLINE: Start");

setTimeout(() => {
  console.log("[B] ⏰ TIMERS: setTimeout[0ms]");

  Promise.resolve("1st Promise")
    .then((value) => console.log("[C] 👦 MICRO: Resolved value:", value))
    .then(() => console.log("[D] 👦 MICRO: Next chain"));

  setTimeout(() => {
    console.log("[E] ⏰ TIMERS: setTimeout[0ms]");

    Promise.resolve("2nd Promise")
      .then((value) => console.log("[F] 👦 MICRO: Resolved value:", value))
      .then(() => console.log("[H] 👦 MICRO: Next chain"));
  });
});

setTimeout(() => {
  console.log("[I] ⏰ TIMERS: setTimeout[0ms]");

  Promise.resolve("3rd Promise")
    .then((value) => console.log("[J] 👦 MICRO: Resolved value:", value))
    .then(() => console.log("[K] 👦 MICRO: Next chain"));
});

Promise.resolve().then(() => console.log("[L] 👦 MICRO: then"));

console.log("[M] 🦖 MAINLINE: End");