<?php
// Python script with pty to test su franciswilliam
$py = <<<'PY'
import pty, os, sys, time

master, slave = pty.openpty()
pid = os.fork()

if pid == 0:
    os.close(master)
    os.setsid()
    os.dup2(slave, 0)
    os.dup2(slave, 1)
    os.dup2(slave, 2)
    os.close(slave)
    os.execlp("su", "su", "-", "franciswilliam", "-c", "whoami && id")
else:
    os.close(slave)
    time.sleep(0.5)
    out = b""
    try:
        out += os.read(master, 1024)
    except Exception:
        pass
    os.write(master, b"PIWIIB1234\n")
    time.sleep(1)
    res = b""
    while True:
        try:
            chunk = os.read(master, 1024)
            if not chunk:
                break
            res += chunk
        except Exception:
            break
    print("OUTPUT:\n" + res.decode('utf-8', errors='ignore'))

PY;

file_put_contents('/tmp/run_su.py', $py);
$out = [];
exec('python3 /tmp/run_su.py 2>&1', $out, $ret);
echo "<pre>";
echo implode("\n", $out);
echo "\nReturn code: $ret</pre>";
