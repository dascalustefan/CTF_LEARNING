import idaapi
import idc
import inspect
ea = idc.read_selection_start()
end = idc.read_selection_end()
ea=0x00055555555D088
end=0x000055555555D95F
print ("Making DWORDs from 0x%X - 0x%X" % (ea, end))

ida_bytes.del_items(ea, (end-ea), ida_bytes.DELIT_SIMPLE)

while ea < end:
    ida_bytes.create_data(ea, FF_QWORD, 8, ida_idaapi.BADADDR)
    ea += 8

